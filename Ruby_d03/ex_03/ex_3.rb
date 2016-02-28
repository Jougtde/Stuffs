#!/usr/bin/ruby

class String

  def +(var)
    if var.is_a? Integer
      res = self.to_i + var
      self.replace(res.to_s)
    else
      self << var
    end
  end

  def -(var)
    if var.is_a? Integer
      res = self.to_i - var
      self.replace(res.to_s)
    else
      self.slice! var
      self
    end
  end

end
