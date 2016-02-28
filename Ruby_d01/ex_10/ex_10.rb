#!/usr/bin/ruby
def check_array_sum(arr)
  max = arr.max
  arr.delete(max)
  count = 1

  while count <= arr.length
    boule = arr.permutation(count).any?{|sum| sum.inject(:+) == max}
    count += 1
    
    if boule == true
      return true
    end
  end

  return false
end
