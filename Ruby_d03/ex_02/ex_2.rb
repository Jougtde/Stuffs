#!/usr/bin/ruby/

class Calculator

  def self.calculate(input)

    op = input.split(" ")
    unless op.length > 3
    case op[1]
    when "+"
      op[0].to_i.send("+", op[2].to_i)
    when "-"
      op[0].to_i.send("-", op[2].to_i)
    when "*"
      op[0].to_i.send("*", op[2].to_i)
    when "/"
      op[0].to_i.send("/", op[2].to_i)
    when "%"
      op[0].to_i.send("%", op[2].to_i)
    else
      print "Not a valid input"
    end
    else
      print "Not a valid input"
    end
  end
end
