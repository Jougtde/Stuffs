#!/usr/bin/ruby

class Animal
  attr_reader :legs, :sound
  attr_writer :type
  attr_accessor :name

  @@count = 0
  @@history = Array.new

  def initialize(legs = 4, sound = "MmmmKROOOOOOOO", type = "Platypus", name = "Martin")
    @legs = legs
    @sound = sound
    @type = type
    @name = name

    @@count += 1
    @@history.push(@name)
  end

  def to_s

    case
    when (@@count % 10 == 1 && @@count != 11)
      number = @@count.to_s + " st"
    when (@@count % 10 == 2 && @@count != 12)
      number = @@count.to_s + " nd"
    when (@@count % 10 == 3 && @@count != 13)
      number = @@count.to_s + " rd"
    when @@count == 11
      number = @@count.to_s + " th"
    when @@count == 12
      number = @@count.to_s + " th"
    when @@count == 13
      number = @@count.to_s + " th"
    else
      number = @@count.to_s + " th"
    end

      @sound + ", I am " + @name + " of type " + @type + " I have " + @legs.to_s + " legs and I am the " + number + " animal created"
  end

  def speak
    puts @sound
  end

  def self.history
    @@history
  end

end
