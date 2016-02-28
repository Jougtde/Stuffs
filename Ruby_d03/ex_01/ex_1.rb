#!/usr/bin/ruby

def my_super_inspect(obj)

  var = obj.instance_variables
  pubmet = obj.public_methods(false)
  privmet = obj.private_methods(false)
  protmet = obj.protected_methods(false)

  array = Array.new
  array = {'instance variables' => var, 'public methods' => pubmet, 'private methods' => privmet, 'protected methods' => protmet}
end
