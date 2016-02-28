#!/usr/bin/ruby

def reverse_array_sort(array)
  array.sort! {|x, y| y <=> x}
end
