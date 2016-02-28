#!/usr/bin/ruby

class Mother

  def initialize
    if instance_of? Mother
    else
      puts "My daughter!!!"
    end
  end

end

END{puts "Goodbye cruel world!!!"}
