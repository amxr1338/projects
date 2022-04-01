logs_names = []
logs_pass = []
class site():
	def __init__(self, name, password):
		# variables
		self.__name = name
		self.__password = password

	def sign_up(self):
		#sign up
		if self.__name in logs_names:
			if self.__password in logs_pass:
				if logs_names.index(self.__name) == logs_pass.index(self.__password):
					return f"Hello, {self.__name}"
		return "Неправильный пароль или никнейм"
	def log_in(self):
		# log in
		logs_names.append(self.__name)
		logs_pass.append(self.__password)
		return f"Hello, {self.__name}"
while True:
	answer = input("Что вы хотите зарегистрироваться или войти?(напиши 'база данных', если хочешь увидеть все пароли и ники): ").lower()
	if answer == "зарегистрироваться":
		myacc = site(input("Введите никнейм: "),input("Введите пароль: "))
		print(myacc.log_in())
	elif answer == "войти":
		myacc = site(input("Введите никнейм: "),input("Введите пароль: "))
		print(myacc.sign_up())
	elif answer == "база данных":
		number = 1
		for item in logs_names:
			print(f"№{number} ник: {item}, пароль: {logs_pass[logs_names.index(item)]}")
			number += 1
	print("\n")


















input()