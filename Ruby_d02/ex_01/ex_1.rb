#!/usr/bin/ruby
require 'date'

print "Yesterday we were " + (Date.today-1).strftime("%A") + " " + (Date.today-1).strftime("%d")+ " " + (Date.today-1).strftime("%B") + " " + (Date.today-1).strftime("%Y") + " and it was " +  Time.now.strftime("%I") + " hours and " + Time.now.strftime("%M") + " minutes at the same time."
