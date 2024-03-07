import flask
from flask import Flask, render_template

app = flask.Flask(__name__)
app.config["DEBUG"] = True # configurando logs

@app.route('/')
def index():
   return render_template('index.html')

if __name__ == "__main__":
   # 0.0.0.0 é o localhost
   app.run(host="0.0.0.0", debug=True, port="5000")