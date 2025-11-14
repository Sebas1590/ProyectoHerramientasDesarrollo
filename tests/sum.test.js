function sum(a, b) {
  return a + b;
}

test("suma de 2 + 2 debe ser 4", () => {
  expect(sum(2, 2)).toBe(4);
});
