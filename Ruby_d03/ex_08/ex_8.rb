#!/usr/bin/ruby

class Mystery
  class << self
    # ...Be careful the number of sub meta class is undefined.
    class << self
      SECRET = "Mouhahahaha"
    end
  end
end


puts Mystery.instance_class
