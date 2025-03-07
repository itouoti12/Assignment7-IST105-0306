import sys

csvstr = sys.argv[1]
threshold = 4

print(f"<h1>Integers separated by commas: {csvstr}</h1>")
print(f"<div>Threshold: {threshold}</div>")

# validate the input to ensure it contains only integers.
csv = csvstr.split(",")

isNotNumCsv = False
for argument in csv:
    if not argument.isnumeric():
        isNotNumCsv = True

if not isNotNumCsv:
    # calculate the AND, OR, and XOR of all integers in the list.
    andResult = int(csv[0])
    orResult = int(csv[0])
    xorResult = int(csv[0])
    for idx, argument in enumerate(csv):
        if idx != 0:
            andResult &=int(argument)
            orResult |=int(argument)
            xorResult ^=int(argument)

    print(f"<h3>Bitwise AND: {andResult}</h3>")
    print(f"<h3>Bitwise OR: {orResult}</h3>")
    print(f"<h3>Bitwise XOR: {xorResult}</h3>")

    # Use a loop to filter and display all numbers greater than a user-specified threshold.
    filteredList = []
    for argument in csv:
        if int(argument) > threshold:
            filteredList.append(int(argument))

    print(f"<h3>Numbers greater than threshold: {filteredList}</h3>")

else:
    print("<h2>Error: The input should be only integers!!</h2>")






