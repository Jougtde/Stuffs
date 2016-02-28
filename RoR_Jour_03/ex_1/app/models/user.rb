class User < ActiveRecord::Base

  has_secure_password
  has_many :products, foreign_key: "user_id", dependent: :destroy

  validates :email, format: { with: /\A([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})\z/i, on: :create }
  validates :email, uniqueness: { case_sensitive: false }
  validates :username, length: { in: 2..15 }
  validates :password, length: { in: 2..25 }, presence: true
  validates_confirmation_of :password_confirmation

end
