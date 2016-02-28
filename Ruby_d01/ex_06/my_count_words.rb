#!/usr/bin/ruby

def my_count_words(str)

  words = str.split()
  words.sort.inject(Hash.new(0)) { |total, e| total[e] += 1 ;total}

end
