class BidSystem < ActiveRecord::Migration
  def change
    remove_column :bids, :starting_price
    remove_column :bids, :end_date
    remove_column :bids, :immediate_price
    remove_column :bids, :minimum_bid

    add_column :products, :starting_price, :integer
    add_column :products, :end_date, :datetime

    add_index :bids, :user_id
    add_index :bids, :product_id
  end
end
