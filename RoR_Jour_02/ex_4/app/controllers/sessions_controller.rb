class SessionsController < ApplicationController
  def new
  end

  def create
    user = User.find_by(email: params[:session][:email])
    if user && user.authenticate(params[:session][:password])
      flash[:success] = "Login successful"
      log_in user
      redirect_to "/"
    else
      flash.now[:error] = 'Invalid email/password'
      render 'new'
    end
  end

  def destroy
    flash[:success] = "Logout successful"
    log_out
    redirect_to root_url
  end

end
