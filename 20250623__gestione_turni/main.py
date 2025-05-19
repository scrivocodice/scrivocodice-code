# main.py

from params import parse_args, validate_and_process_args
from turni import Turni

def main():
    args = parse_args()
    start_date, end_date, number_of_groups, start_group = validate_and_process_args(args)

    turni = Turni(number_of_groups)
    turni.load(start_date, end_date, start_group)
    turni.to_json()

if __name__ == "__main__":
    main()

