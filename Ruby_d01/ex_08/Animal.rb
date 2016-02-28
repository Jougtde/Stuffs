#!/usr/bin/ruby

class Animal
  attr_reader :legs, :sound
  attr_writer :type
  attr_accessor :name

  def initialize(legs = 4, sound = "MmmmKROOOOOOOO", type = "Platypus", name = "Martin")
    @legs = legs
    @sound = sound
    @type = type
    @name = name
  end

  def speak()
    puts @sound
  end
end
