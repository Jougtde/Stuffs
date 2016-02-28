#!/usr/bin/ruby

def my_show_hash(hash={})
  hash.each do |key, array|
    key = "#{key}"
    array = "#{array}"
    puts key + " : " + array
  end
end
