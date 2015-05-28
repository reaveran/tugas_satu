

#for string
#coba = gets.chomp

#puts "#{coba}"
require_relative 'player'
players = Hash.new

puts '# =================================== #'
puts '# Welcome to the Battle Arena         #'
puts '# =================================== #'
puts '# Description:                        #'
puts '# 1. type "new" to create a character #'
puts '# 2. type "start" to begin the fight  #'
puts '# 3. type "exit" to exit the game     #'
puts '# =================================== #'
puts '# Current Player:                     #'
puts '# -                                   #'
puts '#* Max player 2 or 3                  #'
puts '# =================================== #'
menu = gets.chomp
status="false"
while !menu.eql? "exit" and !status.eql? "true" do
	if(menu.eql? "new")
		if(players.length<3)
			puts "input name : "
			nama = gets.chomp
			players[nama]=(Player.new(nama))
		else
			puts "already reach max player"
			puts "press any key to continue"
			gets
		end
	else if(menu.eql? "start")
		if(players.length<2)
			puts "minimal 2 players"
			puts "press any key to continue"
			gets
		else
			puts '# =================================== #'
			puts '# Welcome to The Battle Arena         #'
			puts '# =================================== #'
			puts "Battle Start: "
			puts "who will attack : "
			p1 = gets.chomp
			while !players.has_key?(p1)
				puts "Player not found!"
				print "Who will attack: "
				p1 = gets.chomp
			end
			puts "who attacked : "
			p2 = gets.chomp
			while !players.has_key?(p2)
				puts "Player not found!"
				print "Who attacked: "
				p2 = gets.chomp
			end
			attack = players.fetch(p1)
			temp=players.fetch(p2).get_blood-20
			if(temp<=0)
				status="true"
			end
			players.fetch(p2).set_blood(temp)
			defend = players.fetch(p2)
			puts "#{attack.get_name} : manna = #{attack.get_manna} , blood = #{attack.get_blood}"
			puts "#{defend.get_name} : manna = #{defend.get_manna} , blood = #{defend.get_blood}"
		end
	end
	end
	#system "clear"
	puts '# =================================== #'
	puts '# Welcome to the Battle Arena         #'
	puts '# =================================== #'
	puts '# Description:                        #'
	puts '# 1. type "new" to create a character #'
	puts '# 2. type "start" to begin the fight  #'
	puts '# 3. type "exit" to exit the game     #'
	puts '# =================================== #'
	puts '# Current Player:                     #'
	if players.empty?
		puts '# -                                   #'
	else
		players.each do |key, player|
		puts "# - #{player.get_name}                #"
		end
	end
	puts '#* Max player 2 or 3                  #'
	puts '# =================================== #'
	menu = gets.chomp
end
puts 'Game Over'