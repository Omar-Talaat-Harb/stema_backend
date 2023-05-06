from flask import *
from predict import predict__random_forest

app = Flask(__name__)
@app.route('/success', methods = ['POST'])  #app url
def success():
  if request.method == 'POST':
    quality_of_collection_bags_cleanness = request.form.get('quality_of_collection_bags_cleanness')
    num_of_needles = request.form.get('num_of_needles')
    satellite_bag = request.form.get('satellite_bag')
    clots = request.form.get('clots')
    net_weight = request.form.get('net_weight')
    volume = request.form.get('volume')
    prewbcsx109l = request.form.get('prewbcsx109l')
    pre_cd_45_34 = request.form.get('pre_cd_45_34')
    pre_viability_of_tnc = request.form.get('pre_viability_of_tnc')
    post_wbcsx109_l = request.form.get('post_wbcsx109_l')

    return predict__random_forest(quality_of_collection_bags_cleanness,num_of_needles,satellite_bag,clots,net_weight,volume,prewbcsx109l,pre_cd_45_34,pre_viability_of_tnc,post_wbcsx109_l)
    




if __name__ == "__main__":
  app.run(host='127.0.0.1', debug=True)


