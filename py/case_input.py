import cgi

# print("Content-Type: text/html; charset=utf-8\n\n");

form = cgi.FieldStorage()

searchterm = form.getvalue("address")

print(searchterm)
