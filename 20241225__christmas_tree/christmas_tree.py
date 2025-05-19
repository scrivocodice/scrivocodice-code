import pyfiglet
from colorama import Fore, Style

ascii_art = pyfiglet.figlet_format("Buon Natale!")
print(Fore.RED + ascii_art + Style.RESET_ALL)

for leaf in [*range(10)] + [2]:
    print(Fore.RED + f'{"x"*(leaf*2+1):^55}' + Style.RESET_ALL)

