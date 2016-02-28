#!/usr/bin/ruby

class Poussin < Animal

  @@countspeak = 0

  def initialize(legs = 2, sound = "Cuit cuit", type = "Poussin", name = "Titi")
    super(legs, sound, type, name)
  end

  def speak
    @@countspeak += 1
    if @@countspeak >= 42
      get_sick
      puts @sound
    else
      puts @sound
    end
  end

  private
    def get_sick
        @sound = "Cuo cuo"
    end

end
