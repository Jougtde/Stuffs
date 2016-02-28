class AddForeignKey < ActiveRecord::Migration
  def change
    add_foreign_key :products, :users
  end
end
