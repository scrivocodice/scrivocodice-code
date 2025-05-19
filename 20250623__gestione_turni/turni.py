# turni.py

import datetime
import json

class Turni:
    def __init__(self, number_of_groups):
        self.number_of_groups = number_of_groups
        self.turni = {}
        self.delta = datetime.timedelta(days=1)

    def load(self, start_date, end_date, start_group):
        while start_date <= end_date:
            if start_group not in self.turni:
                self.turni[start_group] = {}
            if not self._has_date_key(start_group, start_date):
                self._add_date_key(start_group, start_date)
            self._add_day(start_group, start_date)
            start_date = self._get_next_date(start_date)
            start_group = self._get_next_group(start_group)

    def to_json(self, target_path='/tmp/turni.json'):
        with open(target_path, 'w') as fh:
            json.dump(self.turni, fh, indent=2)

    def _has_date_key(self, target_group, target_date):
        return self._get_date_key(target_date) in self.turni[target_group]

    def _add_date_key(self, target_group, target_date):
        self.turni[target_group][self._get_date_key(target_date)] = []

    def _add_day(self, target_group, target_date):
        date_key = self._get_date_key(target_date)
        self.turni[target_group][date_key].append(target_date.day)

    def _get_date_key(self, target_date):
        return target_date.strftime("%Y-%m")

    def _get_next_date(self, target_date):
        return target_date + self.delta

    def _get_next_group(self, current_group):
        return (current_group % self.number_of_groups) + 1

