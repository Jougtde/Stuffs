#!/usr/bin/ruby

def var_dump_array
  Proc.new {|str| puts "#{str.class} : #{str}" }
end
