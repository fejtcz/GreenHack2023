#!/usr/bin/env python3

import socketserver
from http.server import HTTPServer, BaseHTTPRequestHandler
import json

from wiping_methods import ClothTowel, PaperTowel, Dryer

class Handler(BaseHTTPRequestHandler):
    def do_POST(self):
        print("POST request received")
        body = json.loads(self.rfile.read(int(self.headers["content-length"])))
        print(f"Body recevied: {body}")
        response_dict = {"basic": body["basic"]}
        response_dict["dryer"] = Dryer().count_price() if "dryer" in body.keys() else {}
        response_dict["cloth_towel"] = ClothTowel().count_price() if "cloth_towel" in body.keys() else {}
        response_dict["paper_towel"] = PaperTowel().count_price() if "paper_towel" in body.keys() else {}
        response = json.dumps(response_dict).encode('utf-8')

        self.send_response(200)
        self.send_header("Content-type", "application/json")
        self.send_header("Content-length", len(response))
        self.end_headers()
        self.wfile.write(response)

if __name__ == "__main__":
    with socketserver.TCPServer(("", 8000), Handler) as httpd:
        httpd.serve_forever()
