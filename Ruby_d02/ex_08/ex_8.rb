#!/usr/bin/ruby

include Math

class Area

    def self.rectangle(length, width)
      length * width
    end

    def self.circle(radius)
      PI * (radius ** 2)
    end

    def self.triangle(base, height)
      (base * height) / 2
    end

end
