class User < ActiveRecord::Base

  has_secure_password
  has_many :products, foreign_key: "user_id", dependent: :destroy

  has_many :labelings, :as => :labelable
  has_many :labels, :through => :labelings

  validates :email, format: { with: /\A([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})\z/i, on: :create }
  validates :email, uniqueness: { case_sensitive: false }
  validates :username, length: { in: 2..15 }
  validates :password, length: { in: 2..25 }, presence: true
  validates_confirmation_of :password_confirmation

  def all_tags=(names)
    self.labels = names.split(",").map do |name|
      Label.where(title: name.strip).first_or_create!
    end
  end

  def all_tags
    self.labels.map(&:title).join(", ")
  end

end
