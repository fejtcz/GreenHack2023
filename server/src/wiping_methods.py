class Dryer:
    def count_price(self, data):
        kw = int(data["dryer"]["kw"])
        people = int(data["basic"]["people"])
        days_open = int(data["basic"]["days"])
        kwh_price = int(data["dryer"]["kwh_price"])
        fan_sec = 15
        kwh = (days_open * people * fan_sec / 3600) * kw
        return {"kwh": kwh, "price": kwh * kwh_price}

class ClothTowel:
    def count_price(self, data):
        people = int(data["basic"]["people"])
        days_open = int(data["basic"]["days"])
        washing_towels = int(data["cloth_towel"]["washing_towels"])
        washing_price = int(data["cloth_towel"]["washing_price"])
        
        return {"towels_count": "50", "laundry_price": "1000", "water_amount": "1010"}

class PaperTowel:
    def count_price(self, data):
        people = int(data["basic"]["people"])
        days_open = int(data["basic"]["days"])
        unit_price = int(data["paper_towel"]["price"])
        weight = 30
        towels_count = people * days_open * 2
        return {"price": towels_count * unit_price, "weight": (0.25 * 0.12 * towels_count * weight) / 1000}
