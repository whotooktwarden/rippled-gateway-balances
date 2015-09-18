require 'json'
ripple_path="/home/rippled/build/rippled" 
conf = "--conf /etc/rippled/rippled.cfg"

#puts "About to set the JSON lines "

jsonLine = "'{ \"account\": \"rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH\", \"hotwallet\": \"rKYNhsT3aLymkGH7WL7ZUHkm6RE27iuM4C\", \"ledger_index\": \"validated\", \"strict\":  true  }'"
lineString = "#{jsonLine.to_s}"
linetoJSON = "#{lineString}"
#puts "linetoJSON: #{linetoJSON} "

#cmd2=`#{ripple_path} #{conf} json gateway_balances #{linetoJSON}`
cmder="#{ripple_path} #{conf} json gateway_balances #{linetoJSON}"
#puts "#{cmder}"
system("#{cmder}")

puts "Done."
