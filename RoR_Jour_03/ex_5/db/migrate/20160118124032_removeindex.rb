class Removeindex < ActiveRecord::Migration
  def down
    remove_index(:users, :name => 'user_id')
  end
end
