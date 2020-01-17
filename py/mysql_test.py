import mysql.connector

mydb = mysql.connector.connect(
    host="localhost",
    user="findbetterplace",
    passwd="findbetterplace",
    database="findbetterplace"
)
mycursor = mydb.cursor()

mycursor.execute("show tables")

# test-------
for x in mycursor:
 print(x)
# test-------

# insert data
sql = "INSERT INTO caselist (address, casedetail, miseryIndex, user_id) VALUES (%s, %s, %s, %s)"
val = ("aaa", "bbb", "5", "1")
mycursor.execute(sql, val)

mydb.commit()

# Retrieve data

mycursor.execute("SELECT * FROM caselist")

myresult = mycursor.fetchall()

for x in myresult:
    print(x)
    print(type(x))
    print("-----")




