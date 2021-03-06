class ProductsController < ApplicationController
  before_action :set_product, only: [:show, :edit, :update, :destroy]
  before_action :role_admin, only: [:edit, :update, :detroy]

  # GET /products
  # GET /products.json
  def index
    if params[:search]
      @p = Product.search(params[:search])
    end
    @products = Product.paginate(:page => params[:page], :per_page => 10)
  end

  # GET /products/1
  # GET /products/1.json
  def show
    @bid = Bid.new
    @bids = Bid.where(product_id: @product.id)
  end

  # GET /products/new
  def new
    @product = Product.new
    @categories = Category.all
  end

  # GET /products/1/edit
  def edit
    @categories = Category.all
  end

  # POST /products
  # POST /products.json
  def create
    @product = Product.new(product_params)
    @categories = Category.all

    respond_to do |format|
      if @product.save
        format.html { redirect_to @product, notice: 'Product was successfully created.' }
        format.json { render :show, status: :created, location: @product }
      else
        format.html { render :new }
        format.json { render json: @product.errors, status: :unprocessable_entity }
      end
    end
  end

  # PATCH/PUT /products/1
  # PATCH/PUT /products/1.json
  def update
    @categories = Category.all
    respond_to do |format|
      if @product.update(product_params)
        format.html { redirect_to @product, notice: 'Product was successfully updated.' }
        format.json { render :show, status: :ok, location: @product }
      else
        format.html { render :edit }
        format.json { render json: @product.errors, status: :unprocessable_entity }
      end
    end
  end

  # DELETE /products/1
  # DELETE /products/1.json
  def destroy
    @product.destroy
    respond_to do |format|
      format.html { redirect_to products_url, notice: 'Product was successfully destroyed.' }
      format.json { head :no_content }
    end
  end

  def add_new_comment
    @product = Product.find(params[:id])
    comment = @product.comments.create
    comment.comment = params[:comment]
    comment.user_id = current_user.id
    comment.save
    redirect_to :action => :show, :id => @product
  end

  private
  # Use callbacks to share common setup or constraints between actions.
  def set_product
    @product = Product.find(params[:id])
  end

  # Never trust parameters from the scary internet, only allow the white list through.
  def product_params
    params.require(:product).permit(:title, :description, :price, :user_id, :category_id, :end_date, :starting_price, :actual_price)
  end

  def role_admin
    if !(current_user != nil && current_user.id == @product.user_id || current_user != nil && current_user.role == 'admin')
      render(:file => File.join(Rails.root, 'public/403.html'), :status => 403)
    end
  end

end
