#!/usr/bin/ruby

class TextEditor
    attr_reader :text

    def initialize(array)
        @text = array
    end

    def crypt_text
        @text.map! {|string| change_str(string)}
    end

    def decrypt_text
        @text.map! {|string| change_str_back(string)}
    end

    def remove_word(str)
        @text.select! {|string| !string.downcase.include?(str.downcase)}
    end

    def change_char(c)
        if c =~ /[a-zA-Z]/
            if c == "z"
                c = "a"
            elsif c == "Z"
                c = "A"
            else
                c = (c.ord + 1).chr
            end
        end
        c
    end

    def change_str(str)
        string = str.split("").map { |char| change_char(char) }
        string.join("")
    end

    def change_char_back(c)
        if c =~ /[a-zA-Z]/
            if c == "a"
                c = "z"
            elsif c == "A"
                c = "Z"
            else
                c = (c.ord - 1).chr
            end
        end
        c
    end

    def change_str_back(str)
        string = str.split("").map { |char| change_char_back(char) }
        string.join("")
    end
end
