class AddFieldAndDeleteOther < ActiveRecord::Migration
  def change
    remove_column :bids, :actual_bid

    add_column :products, :actual_price, :integer
  end
end
