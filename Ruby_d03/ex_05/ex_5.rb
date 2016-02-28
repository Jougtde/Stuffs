#!/usr/bin/ruby

class Parrot

  def method_missing(mess)
    if "#{mess}".start_with? "say_"
    word = "#{mess}".gsub('say_','').gsub('_',' ')
    puts word
    else
      super
    end
  end

end
