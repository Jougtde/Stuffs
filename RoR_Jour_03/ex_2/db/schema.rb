# encoding: UTF-8
# This file is auto-generated from the current state of the database. Instead
# of editing this file, please use the migrations feature of Active Record to
# incrementally modify your database, and then regenerate this schema definition.
#
# Note that this schema.rb definition is the authoritative source for your
# database schema. If you need to create the application database on another
# system, you should be using db:schema:load, not running all the migrations
# from scratch. The latter is a flawed and unsustainable approach (the more migrations
# you'll amass, the slower it'll run and the greater likelihood for issues).
#
# It's strongly recommended that you check this file into your version control system.

ActiveRecord::Schema.define(version: 20160118124628) do

  create_table "migration_validators", force: :cascade do |t|
    t.string "table_name",      limit: 255, null: false
    t.string "column_name",     limit: 255, null: false
    t.string "validation_type", limit: 255, null: false
    t.string "options",         limit: 255
  end

  add_index "migration_validators", ["table_name", "column_name", "validation_type"], name: "unique_idx_on_migration_validators", using: :btree

  create_table "products", force: :cascade do |t|
    t.string   "title",       limit: 255,   null: false
    t.text     "description", limit: 65535
    t.float    "price",       limit: 24,    null: false
    t.datetime "created_at",                null: false
    t.datetime "updated_at",                null: false
    t.integer  "user_id",     limit: 4,     null: false
  end

  add_index "products", ["user_id"], name: "index_products_on_user_id", using: :btree

  create_table "users", force: :cascade do |t|
    t.string   "username",        limit: 255, null: false
    t.string   "email",           limit: 255, null: false
    t.string   "password_digest", limit: 255, null: false
    t.datetime "created_at",                  null: false
    t.datetime "updated_at",                  null: false
    t.string   "remember_digest", limit: 255
  end

  add_index "users", ["email"], name: "email", unique: true, using: :btree

  add_foreign_key "products", "users"
end
