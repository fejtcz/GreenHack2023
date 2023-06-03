class Dryer:
    def count_price(self, data):
        people = int(data["basic"]["visits_per_day"])
        days_open = int(data["basic"]["open_days"])
        kwh_price = int(data["dryer"]["electric_price"])
        kw = int(data["dryer"]["input_power"])
        fan_sec = 15
        kwh = (days_open * people * fan_sec / 3600) * kw
        return {"kwh": kwh, "price": kwh * kwh_price}

class ClothTowel:
    def count_price(self, data):
        people = int(data["basic"]["visits_per_day"])
        days_open = int(data["basic"]["open_days"])
        washing_towels = int(data["cloth_towel"]["washmachine_capacity"])
        washing_price = int(data["cloth_towel"]["wash_price"])
        towels_count = people // 50
        return {"towels_count": towels_count, "laundry_price": towels_count / washing_towels * washing_price, "water_amount": towels_count / washing_towels * 40}

class PaperTowel:
    def count_price(self, data):
        people = int(data["basic"]["visits_per_day"])
        days_open = int(data["basic"]["open_days"])
        unit_price = float(data["paper_towel"]["price"])
        weight = 30
        towels_count = people * days_open * 2
        return {"price": towels_count * unit_price, "weight": (0.25 * 0.12 * towels_count * weight) / 1000}
