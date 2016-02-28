#!/usr/bin/ruby

module MyDebug
  def who_am_i
    "#{self.class.name.split('::').last} : #{self.object_id} : #{self}"
  end
end
