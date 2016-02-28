#!/usr/bin/ruby

class Logger

  attr_accessor :hash

  def initialize
    @hash = Hash.new
  end

  def save_context(context, key)
    @hash[key] = context
  end

  def execute(code, arg = nil)
    if arg == nil
      retour = eval(code)
      File.open('log', 'a+') { |file| file.write("#{code} : #{retour}\n") }
    else
      ctxt = @hash[arg]
      retour = eval(code, @hash[arg])
      File.open('log', 'a+') { |file| file.write("#{code} : #{retour} : #{arg}\n") }
    end
    retour
  end

end
