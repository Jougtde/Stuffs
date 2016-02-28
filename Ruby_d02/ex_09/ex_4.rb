#!/usr/bin/ruby

class MyContainer
  attr_reader :data
  include MyDebug

  def initialize
    @data = []
  end

  def my_each
    i = 0
    while i < @data.length
      yield(@data[i])
      i += 1
    end
  end

  def <<(arg)
    @data << arg
    self
  end

  def +(arg)
    @data += arg.data
    self
  end

  def to_s
    @data.join(', ')
  end
end
