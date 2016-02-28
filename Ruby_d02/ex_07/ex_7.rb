#!/usr/bin/ruby

def execute(hash = {})
  hash.each do |key, value|
    send(key, *value)
  end
end
