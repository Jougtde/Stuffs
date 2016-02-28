class AddNoNullUserId < ActiveRecord::Migration
  def change
    change_column_null :products, :user_id, false
  end
end
