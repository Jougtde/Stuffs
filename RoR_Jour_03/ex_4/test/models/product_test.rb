require 'test_helper'

class ProductTest < ActiveSupport::TestCase
  test "should not save product without user_id" do
    product = Product.new
    assert product.save
  end
end
