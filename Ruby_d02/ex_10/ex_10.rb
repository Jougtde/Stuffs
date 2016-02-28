#!/usr/bin/ruby

module MyEnumerable

  def my_select
    array = []
    self.my_each do |n|
        if yield(n) == true
          array << n
        end
      end
      array
    end

  def my_map
    array = []
    self.my_each do |n|
      array << yield(n)
    end
    array
  end

  def my_sort
    array = []
    array1 = []
    self.my_each do |n, m|
      integ = yield(n, m)
      if integ == 1
        array << n
      end
      if integ == -1
        array1 << n
      end
    end
    array1 << array.reverse
  end

end
