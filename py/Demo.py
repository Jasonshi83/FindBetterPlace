import pandas as pd
import googlemaps

# df = pd.read_csv("locations.csv")
# set Google maps api key
gmaps_key = googlemaps.Client(key = "AIzaSyDs3vxgxkjSJPQrWLos58EWNL1jMH48Kfo")

# # Create Geocode result object
# df["LAT"] = None
# df["LON"] = None
#
# for i in range(0, len(df), 1):
#     # Take address of property from panda dataframe
#     geocode_result = gmaps_key.geocode(df.iat[i, 0])
#     try:
#         # Get Lon and Lat
#         lat = geocode_result[0]["geometry"]["location"]["lat"]
#         lon = geocode_result[0]["geometry"]["location"]["lng"]
#         # Write values to the pandas dataset to lat and lon columns
#         df.iat[i, df.columns.get_loc("LAT")] = lat
#         df.iat[i, df.columns.get_loc("LON")] = lon
#     except:
#         lat = None
#         lon = None
#
# df


geocode_result = gmaps_key.geocode("74 Taranaki St, Te Aro, Wellington 6011")
lat = geocode_result[0]["geometry"]["location"]["lat"]
lon = geocode_result[0]["geometry"]["location"]["lng"]

print("*" * 50)
print(lat)
print(lon)
print("*" * 50)

