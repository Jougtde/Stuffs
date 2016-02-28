#!/usr/bin/ruby

def my_concat_args(*args)
  "#{args.join(' ')}"
end

puts my_concat_args("Platypus", "Hello", "World")
