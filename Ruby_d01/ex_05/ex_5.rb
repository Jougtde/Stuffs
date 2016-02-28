#!/usr/bin/ruby

input = gets.chomp

while input != "quit" do
values = input.split()

a = values[0]
b = values[2]
c = nil

if values.length != 3
  c = "exist"
end

if a.scan(/[0-9]/) && b.scan(/[0-9]/)
  a = a.to_i
  b = b.to_i
end

  case
  when values[1] == "+" && c != "exist"
      ans = a + b
      puts "#{ans}"
      input = gets.chomp
    when values[1] == "-" && c != "exist"
      ans = a - b
      puts "#{ans}"
      input = gets.chomp
    when values[1] == "*" && c != "exist"
      ans = a * b
      puts "#{ans}"
      input = gets.chomp
    when values[1] == "/" && c != "exist"
      ans = a / b
      puts "#{ans}"
      input = gets.chomp
    when values[1] == "%" && c != "exist"
      ans = a % b
      puts "#{ans}"
      input = gets.chomp
    when values[1].is_a?(String) || c == "exist"
      puts "Not a valid input"
      input = gets.chomp
  end
end
