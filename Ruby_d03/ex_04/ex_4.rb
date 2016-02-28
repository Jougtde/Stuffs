#!/usr/bin/ruby

class Fixnum
  n = Array(1..42)
  n.each do |nbr| define_method("multiply_by_#{nbr}") do self * nbr end end
end
