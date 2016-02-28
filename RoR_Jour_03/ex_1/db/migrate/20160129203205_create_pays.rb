class CreatePays < ActiveRecord::Migration
  def change
    create_table :pays do |t|
      t.string :capitale, null: false
      t.string :devise
      t.integer :habitants

      t.timestamps null: false
    end
  end
end
