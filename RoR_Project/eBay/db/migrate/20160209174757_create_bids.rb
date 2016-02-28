class CreateBids < ActiveRecord::Migration
  def change
    create_table :bids do |t|
      t.integer :starting_price
      t.integer :actual_bid
      t.integer :minimum_bid
      t.datetime :end_date
      t.integer :immediate_price
      t.integer :max_bid
      t.integer :product_id
      t.integer :user_id

      t.timestamps null: false
    end
  end
end
