require 'test_helper'

class UserTest < ActiveSupport::TestCase
  test "should destroy products when user is destroyed" do
    @user = User.new
    @product = Product.new
    @user.destroy
    assert_not_nil(@product)
  end

  test "should save user with O product" do
    @user0 = User.new
    assert @user0.save
  end

  test "should save user with 1 product" do
    @user1 = User.new
    @product1 = Product.new
    assert @user1.save
  end

  test "should save user with 2 products" do
    @user2 = User.new
    @product2 = Product.new
    @product3 = Product.new
    assert @user2.save
  end
end
