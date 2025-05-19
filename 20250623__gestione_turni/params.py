# params.py

import argparse
import datetime

def parse_args():
    parser = argparse.ArgumentParser()
    parser.add_argument(
        "-b", "--begin-date",
        help="Interval begin date: format date as YYYY-MM-DD.",
        required=True
    )
    parser.add_argument(
        "-e", "--end-date",
        help="Interval end date: format date as YYYY-MM-DD.",
        required=True
    )
    parser.add_argument(
        "-n", "--group-number",
        help="Number of groups to assign",
        required=True,
        type=int
    )
    parser.add_argument(
        "-s", "--group-begin",
        help="Number of group to assign on first day",
        required=True,
        type=int
    )
    return parser.parse_args()

def validate_and_process_args(args):
    try:
        start_date = datetime.datetime.strptime(args.begin_date, "%Y-%m-%d")
        end_date = datetime.datetime.strptime(args.end_date, "%Y-%m-%d")
    except ValueError:
        raise ValueError("Date must be in YYYY-MM-DD format.")

    if args.group_number < 1:
        raise ValueError("Number of groups must be >= 1.")
    if not (1 <= args.group_begin <= args.group_number):
        raise ValueError(f"Start group must be between 1 and {args.group_number}.")

    return start_date, end_date, args.group_number, args.group_begin

